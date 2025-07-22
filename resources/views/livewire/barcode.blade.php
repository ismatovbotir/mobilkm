<div class="min-h-screen bg-gray-50 p-4 space-y-4 max-w-md mx-auto">
  <!-- Поисковый input -->
  <input wire:model="barcode" wire:keydown.enter="search"
    type="text"
    placeholder="Поиск товара..."
    class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
    autofocus
  />

  <!-- Карточка товара -->
  <div class="bg-white rounded-2xl shadow p-4 space-y-2">
    <!-- Название и код -->
    <div class="text-lg font-semibold text-gray-800">Принтер Xprinter XP-58</div>
    <div class="text-sm text-gray-500">Код: 123456</div>

    <!-- Labels -->
    <div class="flex flex-wrap gap-2 mt-2">
      <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Термопринтер</span>
      <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">USB</span>
      <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">58 мм</span>
    </div>

    <!-- Таблица -->
    <table class="w-full mt-3 text-sm text-left border-t border-gray-200">
      <thead class="text-gray-500">
        <tr>
          <th class="py-1">Цена</th>
          <th class="py-1">Кол-во</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-t border-gray-100">
          <td class="py-2">450 000 сум</td>
          <td class="py-2">3 шт.</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>