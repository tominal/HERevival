@foreach (\App\Npc::find($npc_id)->npcs as $ts)
    {{ $ts->name }}
@endforeach
