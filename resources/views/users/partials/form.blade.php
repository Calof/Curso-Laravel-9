@csrf

<input type="text" name="name" placeholder="Nome:" value="{{$user->name ?? old('name')}}">
<input type="email" name="email" placeholder="E-mail:" value="{{$user->email ?? old('email')}}">
<input type="password" name="password" placeholder="Senha:">
<button type="submit" class="shadow bg-green-300 hover:bg-green-200 focus:shadow-outline rounded-lg box-content h-100 w-100 p-2">
    Enviar
</button>