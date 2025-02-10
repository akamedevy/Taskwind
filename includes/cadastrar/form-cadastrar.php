<h1 class="text-white text-[50px]">Cadastro</h1>

<form method="POST" class="flex flex-col justify-evenly items-center h-[400px] bg-gray-200 w-[300px] p-3 rounded-lg">

    <label for="nome" class="text-[20px]">Nome: </label>
    <input type="text" name="nome" id="nome" placeholder="insira seu nome" required class="h-[40px] rounded-lg p-3">

    <label for="email" class="text-[20px]">Email: </label>
    <input type="email" name="email" id="email" placeholder="insira seu email" required class="h-[40px] rounded-lg p-3">

    <label for="Senha" class="text-[20px]">Senha: </label>
    <input  type="password" name="senha" id="senha" placeholder="insira sua senha" required class="h-[40px] rounded-lg p-3">

    <input type="submit" name="cadastrar" value="Cadastrar" class="bg-sky-600 h-[45px] rounded-lg w-[80%] cursor-pointer text-white hover:bg-sky-700 text-[20px] transition duration-100 ease-in-out">
    <p class="text-[16px]">já tem uma conta? <a href="App/view/public/login/login.php" class="text-sky-700">Logar</a></p>
</form>