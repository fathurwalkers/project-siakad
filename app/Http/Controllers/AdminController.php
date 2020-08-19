<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Login;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Hash;

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
        // dd($data);


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
        // $sesi_validasi = session('sesi_validasi');
        // $cek_user = Login::where('email', $sesi_validasi)->firstOrFail();
        // if ($cek_user) {
        //     $update_user = Login::where('iduser', $cek_user->iduser)
        //         ->update(['validasi' => 2]);
        //     session()->forget('sesi_validasi');
        //     return redirect('/admin/login')->with('status_terkonfirmasi', 'Selamat, Akun anda telah aktif!');
        // }

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
        $user_login = Login::where('username', $request->username)->firstOrFail();
        $cek_password = Hash::check($request->password, $user_login->password);
        if ($user_login) {
            if ($cek_password) {
                if ($user_login->level === 1) {
                    if ($user_login->validasi === 2) {
                        session(['sesi_user' => $user_login]);
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
        return redirect('/admin/login')->with('status_logout', 'Anda telah logout!');
    }
}
