<h1>Nova Dúvida</h1>

@if ($erros->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.store') }}" method="POST">
     <input type="hidden" value="{{csrf_token()}}" name="_token" id=""> 
    @csrf()
    
    <input type="text" name="subject" placeholder="Assunto" value="{{old('subject')}}">
    <textarea name="body" cols="30" rows="5" placeholder="descrição">{{old('body')}}</textarea>
    <button type="submit">Enviar</button>
</form>