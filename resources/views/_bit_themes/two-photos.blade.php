@include('_bit_themes.partials.bit-name')

<div class="row bit"> 

   @if (!empty($bit->text))
      <div class="col-md-12" style="text-align:justify">
            {!! $bit->text !!}
      </div>
      @include('_bit_themes.partials.button')
   @endif
   
  @if (!empty($bit->photos[0]))
    @foreach ($bit->photos as $photo)
      <div class="col-md-6">
        <img src="{{ url('/photos/'.$photo->id.'/large.'.$photo->filename) }}" style="width:100%;">
        <?php 
        $photo = $bit->photo;
        ?>
        @include('_bit_themes.partials.photo-description')
      </div>
     @endforeach
   @endif

</div>