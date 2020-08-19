<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Login;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function daftar()
    {
        return view('adminregister');
    }

    public function postdaftar(Request $request)
    {
        $data = new Login;

        $token = Hash::make($request->username, [
            'rounds' => 12
        ]);

        $validasi = 1;

        $data = Login::create([
            'username'  => $request->username,
            'password'  => Hash::make($request->password, [
                'rounds' => 12
            ]),
            'email'     => $request->email,
            'level'     => $request->level,
            'validasi'  => $validasi,
            'token'     => $token
        ]);
        $data->save();

        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        //ganti dengan email dan password yang akan di gunakan sebagai email pengirim
        $mail->Username = 'siakadtk123@gmail.com';
        $mail->Password = 'jancokjancok';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        //ganti dengan email yg akan di gunakan sebagai email pengirim
        $mail->setFrom('siakadtk123@gmail.com', 'SIAKAD TK');
        $mail->addAddress($request->email, $request->username);
        $mail->isHTML(true);
        $mail->Subject = "Aktivasi Akun SIAKAD TK";
        $mail->Body = "Selamat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini. 
        <br> <a href='http://127.0.0.1:8000/admin/validasi/";
        $mail->Body .= $request->username;
        $mail->Body .= "/";
        $mail->Body .= $token;
        $mail->Body .= "'>AKTIFKAN AKUN</a>";

        $mail->send();

        return redirect('/admin/login')->with('status_validasi', 'Email verifikasi telah dikirim, silahkan verifikasi terlebih dahulu');
    }

    public function validasi(Request $request, $cek)
    {
        $cek_token = Login::where('username', $cek)->firstOrFail();

        if ($cek_token) {
            if (Hash::check($cek_token->username, $cek_token->token)) {
                $update_user = Login::where('username', $cek_token->username)
                    ->update([
                        'validasi' => 2
                    ]);
                // session()->forget('sesi_validasi');
                return redirect('/admin/login')->with('status_terkonfirmasi', 'Selamat, Akun anda telah aktif!');
            }
        }

        return redirect('/admin/login')->with('status_gagal_konfirmasi', 'Verifikasi telah kadaluarsa, silahkan melakukan verifikasi ulang.');
    }

    public function login(Request $request)
    {
        if (session('sesi_user')) {
            return redirect('/admin');
        }
        return view('adminlogin');
    }

    public function ceklogin(Request $request)
    {
        $cek_login = Login::where('username', $request->username)->firstOrFail();
        $cek_password = Hash::check($request->password, $cek_login->password);
        if ($cek_login) {
            if ($cek_password) {
                if ($cek_login->level === 1) {
                    if ($cek_login->validasi === 2) {
                        session(['sesi_user' => $cek_login]);
                        return redirect('/admin');
                    }
                }
            }
        }
        return redirect('/admin/login')->with('status_fail', 'Login gagal, username atau password salah')->withInput();
    }

    public function beranda()
    {
        if (!session('sesi_user')) {
            return redirect('/admin/login');
        }
        $users = session('sesi_user');
        return view('adminberanda', compact('users'));
    }

    public function alert()
    {
        return view('welcome');
    }

    public function keluar(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login');
    }

    public function lupapassword()
    {
        return view('lupapassword');
    }

    public function postLupapassword(Request $request)
    {
        $reset = Login::where('email', $request->email)->firstOrFail();

        if ($reset) {
            if ($reset->email == $request->email) {
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                //ganti dengan email dan password yang akan di gunakan sebagai email pengirim
                $mail->Username = 'siakadtk123@gmail.com';
                $mail->Password = 'jancokjancok';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                //ganti dengan email yg akan di gunakan sebagai email pengirim
                $mail->setFrom('siakadtk123@gmail.com', 'SIAKAD TK');
                $mail->addAddress($request->email, $request->username);
                $mail->isHTML(true);
                $mail->Subject = "Reset Password akun SIAKAD TK";
                $mail->Body = "Anda telah mengirim request Reset Password, Berikut dibawah ini link untuk reset Password anda. 
                <br> <a href='http://127.0.0.1:8000/lupa-password/validasi_password/";
                $mail->Body .= $reset->username;
                $mail->Body .= "/";
                $mail->Body .= $reset->token;
                $mail->Body .= "'>AKTIFKAN AKUN</a>";
                $mail->send();
                return redirect('/lupa-password')->with('status_terkirim', 'Email verifikasi password telah terkirim. silahkan cek email anda untuk melakukan reset password');
            }
        }

        return redirect('/lupa-password')->with('status_tidak_terkirim', 'email yang anda masukkan tidak terdaftar. silahkan masukkan email yang terdaftar!');
    }

    public function getvalidasiPassword(Request $request, $cekk)
    {
        $cek_token2 = Login::where('username', $cekk)->firstOrFail();

        if ($cek_token2) {
            if (Hash::check($cek_token2->username, $cek_token2->token)) {
                session([
                    'cek_valid' => 'cek_valid',
                    'get_user' => $cek_token2
                ]);
                // session(['get_user' => $cek_token2]);
                return redirect('/lupa-password/reset/');
            }
        }
        return view('adminlogin')->with('status_gagal_konfirmasi', 'Verifikasi telah kadaluarsa, silahkan melakukan verifikasi ulang.');
    }

    public function resetpassword(Request $request)
    {
        $cek_valid = session('cek_valid');
        if (!$cek_valid) {
            return redirect('/admin/login');
        } else {
            $get_user = session('get_user');
            session(['user_get' => $get_user]);
            // dump($get_user);
            // dd($cek_valid);
            return view('resetpassword');
        }
    }

    public function gantipassword(Request $request)
    {
        $reset_user = session('user_get');
        // dd($reset_user);

        $password_baru = Hash::make($request->password, [
            'rounds' => 12
        ]);

        $reset_password = Login::where('username', $reset_user->username)
            ->update([
                'password' => $password_baru
            ]);

        session()->flush();
        return redirect('/admin/login')->with('status_passwordreset', 'Anda telah berhasil melakukan reset password.');
    }
}
