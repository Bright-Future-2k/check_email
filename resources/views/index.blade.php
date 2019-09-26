<div class="main-content">
    <h1>correct email app</h1>
    <form method="get">
        @csrf
        <label for="email-input">Email:</label>
        <input id="email-input" type="text" placeholder="Nhap email need to check" name="email">
        <input type="submit" value="Check">
    </form>
    @if(!empty(request('email')))
        ket qua: {{$check?'dung dinh dang email':'sai dinh dang email'}}
    @endif
</div>
