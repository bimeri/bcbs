@if(auth::user()->lang == 'fr')
    @if($current_semester->id == 1)
        premier semestre
    @endif
    @if($current_semester->id == 2)
            deuxième semestre
    @endif
        @if($current_semester->id == 3)
            semestre de rattrapage
    @endif
@else
    {{ $current_semester->name ?? ""}}
@endif
    {{ $current_year->name }}
