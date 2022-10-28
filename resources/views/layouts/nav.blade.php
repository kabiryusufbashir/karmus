<div class="col-md-4">
    <div class="card">
        <div class="bg-gray-800">
            <div class="row text-white">
                
                <div class="bars col-md-11 py-4 px-4 bg-green-600">
                    <a class="text-white" href="/home"> 
                    <i class="fas fa-home"></i></span>
                    <br>Home
                    </a>
                </div>
                
                <div class="bars col-md-11 py-4 px-4 bg-gray-700">
                    <a class="text-white" href="/words">
                        <i class="fas fa-language"></i>
                        <br>Words
                    </a>
                </div>
                <div class="bars col-md-11 py-4 px-4 bg-green-600">
                    <a class="text-white" href="/numbers">
                        <i class="fas fa-sort-numeric-up"></i>
                        <br>Number
                    </a>    
                </div>
                <div class="bars col-md-11 py-4 px-4 bg-gray-700">
                    <a class="text-white" href="/proverbs">
                        <i class="fas fa-language"></i>
                        <br>Proverbs
                    </a>
                </div>
                <div class="bars col-md-11 py-4 px-4 bg-green-600">
                    <a class="text-white" href="/pronunciation">
                        <i class="fas fa-microphone-alt"></i>
                        <br>Pronunciation
                    </a>
                </div>
                <div class="bars col-md-11 py-4 px-4 bg-gray-700">
                    <a class="text-white" href="/users">
                        <i class="fas fa-users"></i>
                        <br>Users
                    </a>    
                </div>
                <div class="bars col-md-11 py-4 px-4 bg-green-600">
                    <a class="text-white" href="/contributors">
                        <i class="fas fa-users"></i>
                        <br>Contributors
                    </a>    
                </div>
                <div class="bars col-md-11 py-4 px-4 bg-gray-700">
                    <a class="text-white" href="/donations">
                        <i class="fas fa-users"></i>
                        <br>Donation
                    </a>    
                </div>
                <div class="bars col-md-11 py-4 px-4 bg-green-600">
                    <a class="text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <br>Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>