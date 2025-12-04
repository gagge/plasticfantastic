@use(function App\Helpers\{isLinkActive}) 

<a {{ $attributes }} aria-current="{{ isLinkActive($attributes->get('href')) ? 'page' : false }}"
  class="{{ isLinkActive($attributes->get('href')) ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
  {{ $slot }}
</a>
