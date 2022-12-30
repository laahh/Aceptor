@extends('user.layout.layout')
@section('content')

<div class="lg:px-20 lg:py-20 px-3 py-3">
    <h1 class="font-Poppins text-xl ">Kuis</h1>
    <iframe id="embedded-human" frameBorder="0" style="aspect-ratio: 1 / 1; width: 100%" allowFullScreen="true"
        loading="lazy"
        src="https://human.biodigital.com/viewer/?id=4yRX&ui-anatomy-descriptions=false&ui-anatomy-labels=true&ui-audio=true&ui-chapter-list=false&ui-fullscreen=true&ui-help=true&ui-info=true&ui-label-list=true&ui-layers=true&ui-loader=circle&ui-media-controls=full&ui-menu=true&ui-nav=true&ui-search=true&ui-tools=true&ui-tutorial=true&ui-undo=true&ui-whiteboard=true&initial.none=true&disable-scroll=false&uaid=KNrnm&paid=o_3b04a6f0"></iframe>
</div>

@endsection