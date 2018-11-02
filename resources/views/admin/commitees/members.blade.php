@extends('layouts.admin_layout')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($commitee->members as $member)
                        <div class="col-md-3" style="display: inline-block;">
                            <div class="card">
                                @if(empty($memeber->data->photo))
                                <img style="max-height: 300px;max-width: 300px;padding: 5%" class="card-img-top" src="/storage/default2.png" alt="Card image cap">
                                <div class="card-body">
                                     <h5 >{{ $member->data->getFullName() }}
                                    </h5>
                                <button type="submit" class="item pull-right"  style="border-radius: 50%;background: #E5E5E5;width: 30px;height: 30px;margin-top: -13%" >
                                    <i class="zmdi zmdi-delete" style=""></i>
                                </button>

                               

                                    
                                </div>
                                @else
                                <img style="max-height: 140px;max-width: 300px;" class="card-img-top" src="/storage/users/avatars/{{ $member->data->photo }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $member->data->getFullName() }}</h5>
                                </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
