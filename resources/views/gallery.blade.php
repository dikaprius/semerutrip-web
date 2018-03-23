@extends ('layouts.master')

@section('content')

<div class="title" id="Home" data-aos= "fade-right">
  Gallery
</div>
    <script type="text/javascript">
          AOS.init({
                duration: 2000,
            })
    </script>

@endsection

@section('subcontent')

<div class="grid-container2">
@foreach( $files as $image)

<div class="content">
  <a href="{{url('') . Storage::url($image->filename)}}" data-lightbox="roadtrip" data-title="{{ $image->title }}">
    <div class="content-overlay"></div>
    <img src="{{url('') . Storage::url($image->filename)}}" alt="Ranu Pani" class="image">
    <div class="content-details fadeIn-top">
      <h3>{{ $image->title}}</h3>
      <p></p>
    </div>
  </a>
</div>


@endforeach
</div>
@endsection
