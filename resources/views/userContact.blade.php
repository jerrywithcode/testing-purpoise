
@include('components.header')
@include('components.nav')

<section class="container">
    <hgroup>
        <h2>Contact Us</h2>
        <h3>We'd love to hear from you!</h3>
    </hgroup>
    <form action="{{route('user-form')}}" method="POST" class="grid">
    @csrf

      <!-- Name Field -->
        <div>
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" >
            @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Email Field -->
        <div>
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" >
             @error('email')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Message Field -->
        <div class="span-columns">
            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Type your message here..." ></textarea>
               @error('message')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Submit Button -->
        <button type="submit">Send Message</button>
    </form>
</section>
@include('components.footer')

