<div class="admin-monster-delet-div">
    <h1>{{ __('messages.adminMonsterDeletH1') }}</h1>
        @if(session('adminMonsterSucces'))
            <p style="color:green;">{{ session('adminMonsterSucces') }}</p>
        @endif
        @if(session('adminMonsterError'))
            <p style="color:red;">{{ session('adminMonsterError') }}</p>
        @endif
    <div class="table-fixed-div">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ __('messages.adminMonsterDeletName') }}</th>
                    <th>{{ __('messages.adminMonsterDeletDelTableHeader') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monsters as $monster)
                    <tr>
                        <td>
                            {{$monster->name}}
                        </td>
                        <td>
                            <form class="eventDeletFormDelet" method="post"  action="{{ route('deletMonster') }}">
                                @csrf
                                <input type="hidden" id="MonsterDeletIDData" name="MonsterDeletIDData" value="{{$monster->id}}" readonly>
                                <button type="submit" class="btn btn-danger btn-sm delete-event-btn">
                                    {{ __('messages.adminMonsterDeletDelButton') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
</div>



                                
                               
                               
                          