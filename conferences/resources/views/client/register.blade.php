@if(in_array(\App\Data\UserData::CLIENT, $conference['participants'], true))
<span class="badge text-bg-success">{{ __('messages.registered') }}</span>
@else
<form class="inline" method="post" action="{{ route('client.register',$conference['id']) }}">@csrf
<button class="btn btn-primary">{{ __('messages.register') }}</button></form>
@endif
