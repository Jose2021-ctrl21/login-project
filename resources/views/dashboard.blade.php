@include('layout.header')
@include('layout.nav-bar')
<div class="artboard">
    @if($errors->any())
    <ul>
        @foreach ($errors-all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif  
    <div class="banner" >
        <span class="signin-title">Dashboard</span>
    </div>
    <form method="POST" action="{{route('logout')}}">
        @csrf
        <div class="box-container">
            <div class="small-box">
                <div class=" container2 sign-out">
                    <h1>Welcome {{session('username')}}!</h1><br>
                    @if(session('success'))
                        <div class="alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    <input type="submit" class="sign-out-btn" value="Sign out">
                </div>
            </div>
        </div>
    </form>
@include('layout.footer')
</div>  
<script src="js/scripts.js"></script>
