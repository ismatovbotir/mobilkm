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
    @if($data["status"]==200)
    <div class="text-lg font-semibold text-gray-800">{{$data["message"]["name"]}}</div>
    <div class="text-sm text-gray-500">Код: {{$data["message"]["code"]}}</div>

    <!-- Labels -->
    <div class="flex flex-wrap gap-2 mt-2">
      <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">{{$data["message"]["partner"]}}</span>
     
    </div>

    <!-- Stock -->
    <table class="w-full mt-3 text-sm text-left border-t border-gray-200">
      <thead class="text-gray-500">
        <tr>
          <th class="py-1">Склад</th>
          <th class="py-1">Кол-во</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data["message"]["stock"] as $stock)
        <tr class="border-t border-gray-100">
          <td class="py-2">{{$stock["name"]}}</td>
          <td class="py-2">{{$stock["value"]}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
    <!-- Price -->
    <table class="w-full mt-3 text-sm text-left border-t border-gray-200">
      <thead class="text-gray-500">
        <tr>
          <th class="py-1">Кат.Цен</th>
          <th class="py-1">Цена</th>
        </tr>
      </thead>
      <tbody>
      @foreach($data["message"]["prices"] as $price)
        <tr class="border-t border-gray-100">
          <td class="py-2">{{$price["name"]}}</td>
          <td class="py-2">{{$price["value"]}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div class="text-lg font-semibold text-gray-800">{{$data["message"]}}</div>
    @endif  
</div>
  
</div>