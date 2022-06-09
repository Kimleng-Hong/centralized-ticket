@extends('main.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="text-center"><i class="fas fa-shopping-bag pe-1"></i> Tinh Sruol</h4>
                </div>

                <div class="card-body">
                    <p> A place where you can buy various of availible tickets without need to be physically there. </p>
                    <p>
                        This system is started in the purpose of seeing the need of new development of many systems in Cambodia especially when it comes to a ticket booking system in a type of selling variety of tickets at the same place. 
                        These types of system would provide many benefits for different types of user. 
                        This is useful for our user because it can provide a place where they can come and check different types of ticket that they want and purchase them in one place. 
                        It also can be a good place for any ticket seller who want to find a system where they can use to sell their ticket on the internet so that they can earn extra revenues doing so. 
                        There also benefit for average user as well because this system could allow them to sell their own ticket, this feature is here because it could help those who have any types of event that they need some place to sell their ticket to those who want to attend such as social event or small community event but do not have a way to sell their ticket</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection