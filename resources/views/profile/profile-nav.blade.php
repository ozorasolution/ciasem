<div class="col-lg-3 mb30">
    <div class="card padding30 rounded-5">
        <div>
            <div class="img-profile">
                <img src="https://puree.id/desa-api/uploads/{{ Auth::user()->pathGambar }}" alt="" onerror="this.style.display='none';">
            </div>
            <div class="mt-2 text-center">
                <h4>
                    {{ Auth::user()->nama_lengkap }}
                    <span class="profile_username text-gray">{{ Auth::user()->nik }}</span>
                </h4>
            </div>
        </div>
        <div class="spacer-20"></div>
        <ul class="menu-col">
            <li><a href="{{ route('profile.dashboard') }}" class="{{ request()->routeIs('profile.dashboard') ? 'active' : '' }}"><i class="fa fa-home"></i>Dashboard</a></li>
            <li><a href="{{ route('profile.datauser') }}" class="{{ request()->routeIs('profile.datauser') ? 'active' : '' }}"><i class="fa fa-user"></i>Data Pribadi</a></li>
            <li><a href="{{ route('profile.pengajuan') }}" class="{{ request()->routeIs('profile.pengajuan') ? 'active' : '' }}"><i class="fa fa-calendar"></i>Pengajuan</a></li>
            <li><a class="logout"><i class="fa-solid fa-right-from-bracket"></i>Keluar</a></li>
        </ul>
    </div>
</div>
