<h1 class="text-white text-[50px]">Login</h1>

<form method="POST" class="flex flex-col justify-evenly items-center h-[400px] bg-white w-[300px] p-3 rounded-lg shadow-lg shadow-blue-500/10">

    <label for="email" class="text-[20px] text-gray-800">Email: </label>
    <input type="email" name="email" id="email" placeholder="insira seu email" required class="h-[40px] rounded-lg p-3 bg-gray-100 border border-gray-300 focus:border-sky-600 focus:ring-2 focus:ring-sky-200 outline-none transition duration-200">

    <label for="Senha" class="text-[20px] text-gray-800">Senha: </label>
    <input  type="password" name="senha" id="senha" placeholder="insira sua senha" required class="h-[40px] rounded-lg p-3 bg-gray-100 border border-gray-300 focus:border-sky-600 focus:ring-2 focus:ring-sky-200 outline-none transition duration-200">

    <input type="submit" name="logar" value="Logar" class="bg-sky-600 h-[45px] rounded-lg w-[80%] cursor-pointer text-white hover:bg-sky-700 text-[20px] transition duration-100 ease-in-out">
    <p class="text-[16px]">não tem uma conta? <a href="../../../../index.php" class="text-sky-700">Cadastrar</a></p>
</form>