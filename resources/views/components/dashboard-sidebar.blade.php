<div class="min-h-screen bg-white shadow-sm p-8 pt-28 text-lg">
    <nav>
        <ul class="flex flex-col gap-6">
            <li>
                <a class="p-2 rounded-md text-pink-500 transition-all ease-in-out" href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li>
                <a class="p-2 rounded-md text-pink-500 transition-all ease-in-out" href="{{ route('pemasukan.index') }}">
                    Pemasukan
                </a>
            </li>
            <li>
                <a class="p-2 rounded-md text-pink-500 transition-all ease-in-out" href="{{ route('pengeluaran.index') }}">
                    Pengeluaran
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="text-lg ml-2 text-blue-500 cursor-pointer" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout
                    </a>
                </form>
            </li>
        </ul>
    </nav>
</div>