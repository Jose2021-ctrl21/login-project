@include('layout.header')
@include('layout.nav-bar')
    <div class="artboard">
        <div class="banner" >
            <span class="signin-title">Sign in</span>
        </div>
        @if($errors->any())
            <ul>
                @foreach ($errors-all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{route('login.index')}}">
            <div class="box-container">
                @csrf
                @method('post')
                <div class="small-box">
                    @if(session('error'))
                        <div class="alert-danger">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    <div class="alignment1">
                        <Label>USERNAME</Label>
                        <input type="text" name="username" id="username" >
                    </div>
                    <div class="alignment2">
                        <Label>PASSWORD</Label>
                        <input type="text" name="password" id="password" >
                    </div>
                    <div class="container2 alignment3">
                        <input type="submit" class="sign-in-btn" value="Sign in"/>
                        <a href="" class="forget-password">forget password?</a>
                    </div>
                    <div class="privacy-terms-container">
                        <a href="">Privacy</a>
                        <a href="">Terms</a>
                    </div>
                </div>
            </div>
        </form>
@include('layout.footer')
</div>  
<script src="js/scripts.js"></script>

