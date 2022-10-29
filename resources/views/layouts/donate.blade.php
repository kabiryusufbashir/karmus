<div id="donateNowContent" class="p-4 bg-white rounded-bl-xl rounded-br-xl">
    <h1 class="px-8 py-3 text-xl font-medium text-center">Donate Now</h1>
    <!-- Add record  -->
    <div>
        <form action="{{ route('pay') }}" method="POST" class="px-6 lg:px-8 pb-8">
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
                <input required type="text" name="phone" value="{{old('phone')}}" placeholder="Phone" class="input-field">
                @error('phone')
                    {{$message}}
                @enderror
            </div>
            <div>
                <input required type="number" name="amount" value="{{old('amount')}}" placeholder="Amount" class="input-field">
                @error('amount')
                    {{$message}}
                @enderror
            </div>
            <div class="mt-3 text-right">
                <button class="submit-button">DONATE NOW</button>
            </div>
        </form>
    </div>
</div>