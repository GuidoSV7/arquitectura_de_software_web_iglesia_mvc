<div class="flex flex-col h-screen">
  <!-- Header -->
  <div class="flex items-center justify-between bg-gray-800 text-white p-4">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Logout</button>
  </div>
  <!-- Main Content -->
  <div class="flex flex-grow">
    <!-- Sidebar -->
    <div class="bg-gray-200 w-1/4 p-4">
      <h2 class="text-lg font-bold mb-4">Menu</h2>
      <ul class="text-gray-700">
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Users</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Products</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Orders</a></li>
        <li class="mb-2"><a href="#" class="hover:text-blue-500">Settings</a></li>
      </ul>
    </div>
    <!-- Content -->
    <div class="flex-grow p-4">
      <!-- Users CRUD -->
      <h2 class="text-lg font-bold mb-4">Users</h2>
      <!-- Create User Form -->
      <form class="mb-4">
        <label class="block mb-2" for="name">Name</label>
        <input type="text" id="name" class="w-full border border-gray-400 p-2 mb-2" required="">
        <label class="block mb-2" for="email">Email</label>
        <input type="email" id="email" class="w-full border border-gray-400 p-2 mb-2" required="">
        <label class="block mb-2" for="password">Password</label>
        <input type="password" id="password" class="w-full border border-gray-400 p-2 mb-2" required="">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create User</button>
      </form>
      <!-- User List -->
      <table class="w-full border border-gray-400">
        <thead>
          <tr>
            <th class="border border-gray-400 p-2">Name</th>
            <th class="border border-gray-400 p-2">Email</th>
            <th class="border border-gray-400 p-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-400 p-2">John Doe</td>
            <td class="border border-gray-400 p-2">johndoe@example.com</td>
            <td class="border border-gray-400 p-2">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">Show</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
