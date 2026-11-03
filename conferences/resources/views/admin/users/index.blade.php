@extends('layouts.app')
@section('title', __('messages.manage_users'))
@section('content')
<h1>{{ __('messages.manage_users') }}</h1>
<div class="table-responsive"><table class="table"><thead><tr>
@foreach(['first_name','last_name','email','role','actions'] as $key)<th>{{ __('messages.'.$key) }}</th>@endforeach
</tr></thead><tbody>@foreach($users as $id=>$user)<tr><td>{{ $user['first_name'] }}</td><td>{{ $user['last_name'] }}</td><td>{{ $user['email'] }}</td><td>{{ __('messages.'.$user['role']) }}</td>
<td><a href="{{ route('admin.users.edit',$id) }}">{{ __('messages.edit') }}</a></td></tr>@endforeach</tbody></table></div>
@endsection
