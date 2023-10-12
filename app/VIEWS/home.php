<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>




    <?php include '../app/Components/Header_user.php' ?>



    </div>
    <main>
        <div class="container mx-auto ">

            <div class="h-96 overflow-hidden bg-cover bg-center w-full" style="background-image: url('https://images.pexels.com/photos/5418305/pexels-photo-5418305.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Bienvenido a nuestra comunidad</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                    </div>
                </div>
            </div>



            <h3 class="text-gray-600 text-2xl font-medium text-center mt-5">hola</h3>

            <div class="md:flex mt-8 md:-mx-4 px-6">
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://images.pexels.com/photos/5206040/pexels-photo-5206040.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Nosotros</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Eventos</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="h-96 overflow-hidden bg-cover bg-center w-full mt-12" style="background-image: url('https://images.pexels.com/photos/5418305/pexels-photo-5418305.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Bienvenido a nuestra comunidad</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                    </div>
                </div>
            </div>


            <main class="py-12 md:px-20 sm:px-14 px-6">
    <div class="flex flex-wrap -m-4">
        <?php foreach ($events as $event) { ?>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="shadow-md">
                    <div>
                        <img class="bg-cover" src="<?php echo $event['photo_url']; ?>" alt="" style="width: 100%; height: 25%;" />
                    </div>
                    <div class="px-4">
                        <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2"><?php echo $event['name']; ?></h1>
                        <p class="text-gray-700 mb-2"><?php echo $event['description']; ?></p>
                        <div class="flex justify-between mt-4">
                        
                            <span class="mb-2 text-gray-800 font-bold">Read more</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>









        </div>
    </main>


    </div>

    <?php include '../app/Components/Footer.php' ?>


</body>

</html>