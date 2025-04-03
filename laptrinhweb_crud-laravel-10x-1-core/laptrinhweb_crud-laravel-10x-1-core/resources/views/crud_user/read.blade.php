@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
            <div class="detail-box">
            <h4 class="text-center">Màn hình chi tiết</h4>
            <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        Lập trình web © 01/2024
    </div>
            </div>
        </div>
    </main>
@endsection


       

