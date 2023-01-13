<x-layouts.app title="Contact title" meta-description="Contact description">

    <h1>Contact us</h1>

    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="" method="post" action="{{ route('contact.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <div><label>Name</label></div>
                <div><input type="text" class="form-control" name="name" id="name"></div>
            </div>
            <div class="form-group">
                <div><label>Email</label></div>
                <div><input type="email" class="form-control" name="email" id="email"></div>
            </div>
            <div class="form-group">
                <div><label>Phone</label></div>
                    <div><input type="text" class="form-control" name="phone" id="phone"></div>
            </div>
            <div class="form-group">
                <div><label>Subject</label></div>
                    <div><input type="text" class="form-control" name="subject" id="subject"></div>
            </div>
            <div class="form-group">
                <div><label>Message</label></div>
                    <div><textarea class="form-control" name="message" id="message" rows="4"></textarea></div>
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>

</x-layouts.app>
