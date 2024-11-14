@extends('components.layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h3 style="margin-top:45px" class="text-2xl font-semibold mb-4">Your Notifications</h3>

        <div class="bg-white shadow rounded-lg">
            <div class="p-4 border-b">
                <h3 class="text-lg font-semibold text-gray-700">Recent Notifications</h3>
            </div>

            <div class="max-h-80 overflow-y-auto">
                @if(auth()->check() && auth()->user()->unreadNotifications->count() > 0)
                <form style="margin-right:899px" action="{{route('read.all.notify')}}" method="GET">
                    <div class="p-4 text-center border-t">
                        <button  class="btn btn-primary">Read All</button>
                    </div>
                </form>
                @endif
                @forelse($notifications as $notify)
                    <div class="px-4 py-4 border-b last:border-none hover:bg-gray-50">
                        <p style="color:black" class="text-gray-800">
                            {{ $notify->data['notify'] ?? 'Notification message' }}
                        </p>
                        <span class="text-xs text-gray-500">
                            {{ $notify->created_at->diffForHumans() }}
                        </span>
                        <form style="margin-right: 990px" action="{{route('read.notify', $notify->id)}}" method="GET">
                            <div class="p-4 text-center border-t">
                                <button  class="btn btn-primary">Read</button>
                            </div>
                        </form>
                    </div>
                @empty
                    <div class="px-4 py-4 text-gray-500">
                        No notifications available.
                    </div>
                @endforelse

            </div>

        </div>
    </div>
@endsection

