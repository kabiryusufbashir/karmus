<div id="addWordForm" class="">
    @if(Auth::guard('contributors')->user())                 
        <!-- Add Word Form Content  -->
        <div class="py-4 px-1 bg-white rounded-bl-xl rounded-br-xl">
            <h1 class="px-8 py-3 text-xl font-medium">Add A New Word </h1>
            <!-- Add record  -->
            <div>
                <form action="{{ route('contributor-add-word') }}" method="POST" class="px-6 lg:px-8 pb-8">
                    @csrf
                    <div class="grid grid-cols-2 gap-3 mb-1">
                        <div>
                            <input required type="text" name="wordEnglish" value="{{old('wordEnglish')}}" placeholder="English Word *" class="input-field">
                            @error('wordEnglish')
                                {{$message}}
                            @enderror
                        </div>
                        <div>
                            <input required type="text" name="wordHausa" value="{{old('wordHausa')}}" placeholder="Hausa Word *" class="input-field">
                            @error('wordHausa')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mb-1">
                        <div>
                            <input required type="text" name="meaning" value="{{old('meaning')}}" placeholder="Meaning *" class="input-field">
                            @error('meaning')
                                {{$message}}
                            @enderror
                        </div>
                        <div>
                            <input required type="text" name="maanarkamar" value="{{old('maanarkamar')}}" placeholder="Maanar Kamar *" class="input-field">
                            @error('maanarkamar')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mb-1">
                        <div>
                            <input required type="text" name="tilo" value="{{old('tilo')}}" placeholder="Tilo *" class="input-field">
                            @error('tilo')
                                {{$message}}
                            @enderror
                        </div>
                        <div>
                            <input required type="text" name="jami" value="{{old('jami')}}" placeholder="Jami *" class="input-field">
                            @error('jami')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mb-1">
                        <div>
                            <input required type="text" name="singular" value="{{old('singular')}}" placeholder="Singular *" class="input-field">
                            @error('singular')
                                {{$message}}
                            @enderror
                        </div>
                        <div>
                            <input required type="text" name="plural" value="{{old('plural')}}" placeholder="Plural *" class="input-field">
                            @error('plural')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-3 mb-1">
                        <div>
                            <input type="text" name="similar_word_one" value="{{old('similar_word_one')}}" placeholder="Similar Word One" class="input-field">
                            @error('similar_word_one')
                                {{$message}}
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="similar_word_two" value="{{old('similar_word_two')}}" placeholder="Similar Word Two" class="input-field">
                            @error('similar_word_two')
                                {{$message}}
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="similar_word_three" value="{{old('similar_word_three')}}" placeholder="Similar Word Three" class="input-field">
                            @error('similar_word_three')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="text-center mt-6">
                        <button class="submit-button">Add Word</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Add Word Form Content  -->
    @else
        <!-- Sign In Form Content  -->
        <div id="signInForm" class="p-4 bg-white rounded-bl-xl rounded-br-xl">
            <h1 class="px-8 py-3 text-xl font-medium text-center">Sign In to your Account</h1>
            <!-- Add record  -->
            <div>
                <form action="{{ route('sign-in') }}" method="POST" class="px-6 lg:px-8 pb-8">
                    @csrf
                    <div>
                        <input required type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-field">
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>
                    <div>
                        <input required type="password" name="password" value="{{old('password')}}" placeholder="Password" class="input-field">
                        @error('password')
                            {{$message}}
                        @enderror
                    </div>
                    <div id="signInLink">
                        <h2 class="hover:underline cursor-pointer">Don't have an account yet?</h2>
                    </div>
                    <div class="mt-3 text-right">
                        <button class="submit-button">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End of Sign In Form Content  -->
        <!-- Sign Up Form  -->
        <div id="signUpForm" class="hidden p-4 bg-white rounded-bl-xl rounded-br-xl">
            <h1 class="px-8 py-3 text-xl font-medium">Create an Account on Kamus Dictionary</h1>
            <!-- Add record  -->
            <div>
                <form action="{{ route('create-account') }}" method="POST" class="px-6 lg:px-8 pb-8">
                    @csrf
                    <div>
                        <input required type="text" name="name" value="{{old('name')}}" placeholder="Full Name" class="input-field">
                        @error('name')
                            {{$message}}
                        @enderror
                    </div>
                    <div>
                        <input required type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-field">
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>
                    <div>
                        <input required type="password" name="password" value="{{old('password')}}" placeholder="Password" class="input-field">
                        @error('password')
                            {{$message}}
                        @enderror
                    </div>
                    <div id="signUpLink">
                        <h2 class="hover:underline cursor-pointer">Already have an account? Login here</h2>
                    </div>
                    <div class="mt-3 text-right">
                        <button class="submit-button" type="submit">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End of Sign Up Form  -->
    @endif
</div>