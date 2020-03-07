<ul class="-ml-32 absolute w-32">
    <li class="mb-1 {{ request()->is('invoices') ? 'font-bold text-gray-800' : 'font-medium text-gray-700' }}">
        <a href="/invoices">Invoices</a>
    </li>
    <li class="mb-1 {{ request()->is('profile') ? 'font-bold text-gray-800' : 'font-medium text-gray-700' }}">
        <a href="/profile">Profile</a>
    </li>
    <li class="mb-1 {{ request()->is('account') ? 'font-bold text-gray-800' : 'font-medium text-gray-700' }}">
        <a href="/account">Account</a>
    </li>
    <li class="font-medium mb-1 text-gray-700">
        <a href="#">Log Out</a>
    </li>
</ul>
