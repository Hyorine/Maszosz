 <div class="adminUser-table">
        <h2>{{ __('messages.adminUsertableH2') }}</h2>
    <div class="table-fixed-div">
        <table class="">
            <thead>
                <tr>
                    <th>{{ __('messages.adminUsertableEmail') }}</th>
                    <th>{{ __('messages.adminUsertableReg') }}</th>
                    <th>{{ __('messages.adminUsertableConfirm') }}</th>
                    <th>{{ __('messages.adminUsertableOperation') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                        <td>{{ $user->id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </div>