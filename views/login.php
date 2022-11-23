<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login | VaVersa</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
   <div class="flex min-h-screen">
      <div class="flex flex-row w-full">
         <div class='hidden lg:flex flex-col justify-between mr-96 lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg'>
            <div class="flex items-center justify-start space-x-3">

               <a href="#" class="font-medium text-xl">VaVersa</a>
            </div>
            <div class='space-y-5'>
               <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold">VaVersa Dashboard</h1>
            </div>
            <p class="font-medium"></p>
         </div>
         <div class="flex flex-1 flex-col items-center justify-center px-10 relative">
            <div class="flex lg:hidden justify-between items-center w-full py-4">
               <div class="flex items-center justify-start space-x-3">
                  <a href="#" class="font-medium text-lg"></a>
               </div>
               <div class="flex items-center space-x-2">
                  <span></span>
                  <a href="#" class="underline font-medium text-[#070eff]">
                  </a>
               </div>
            </div>
            <div class="flex flex-1 flex-col justify-center space-y-5 max-w-md">
               <div class="flex flex-col space-y-2 text-center mb-12">
                  <h2 class="text-3xl md:text-4xl font-bold">Sign In To Your Account</h2>
               </div>
               <div class="flex flex-col max-w-md space-y-5">
                  <input type="text" placeholder="Username"
                     class="flex px-3 py-2 md:px-4 md:py-3 outline-none border-none bg-yellow-50 text-black rounded-lg font-medium placeholder:font-normal"
                     required />
                  <input type="text" placeholder="Password"
                     class="flex px-3 py-2 md:px-4 md:py-3 outline-none border-none bg-yellow-50 text-black rounded-lg font-medium placeholder:font-normal"
                     required />
                  <input type="submit" value="Submit"
                     class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-yellow-50 bg-yellow-50 text-black z-20 hover:bg-gray-200">
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>
<style>
   @font-face {
      font-family: laro;
      src: url(../font/Laro-ExtraBold.ttf);
   }

   html,
   body {
      font-family: laro;
   }

   .break-inside {
      -moz-column-break-inside: avoid;
      break-inside: avoid;
   }

   body {
      display: flex;
      justify-content: space-between;
      flex-direction: column;
      min-height: 100vh;
      line-height: 1.5;
      background: linear-gradient(122.22deg, #fbfacd 0.49%, #debace 76.69%);
   }
</style>