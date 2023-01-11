@extends('layouts.app')
@section('content')
    <template>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <header-main></header-main>
                <sidebar></sidebar>
                <router-view></router-view>
            </div>
        </div>
    </template>
@endsection
<script>

</script>
