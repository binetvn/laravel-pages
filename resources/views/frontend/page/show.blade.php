@extends($page->layout)

@foreach($page->sections as $name=>$content)
@section($name)
{!! $content !!}
@endsection
@endforeach