@extends('layout.main')

{{-- @include('layout.partials.navbar') --}}
@section('content')
    {{-- <div class="text-center mb-5">
        <h1>Tabel Perkalian 1-2</h1>
    </div>
    <div class="container">
      <div class="row">
          <div class=" col-lg-1 p-lg-3">
        @for ($i = 1; $i <= 1; $i++)
            @for ($j = 1; $j <= 10; $j++)
                <tr>
                  <td>
                      {{ $i . ' x ' . $j . ' = ' . ($k = $i * $j) }}
                  </td>
                </tr>
            @endfor
        @endfor
    </div>
    <div class="col-lg-1">

        @for ($i = 2; $i <= 2; $i++)
            @for ($j = 1; $j <= 10; $j++)
                <tr>
                    <td>
                        {{ $i . ' x ' . $j . ' = ' . ($k = $i * $j) }}
                    </td>
                </tr>
            @endfor
    </div>
    @endfor
      </div>
    </div> --}}

   <!-- Modal -->


  {{-- <x-modal id="vertically-centered" title="Vertically centered" :centered="true">
    <x-slot name="body">
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </x-slot>
    <x-slot name="footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </x-slot>
  </x-modal> --}}

@endsection


