import React from 'react';

export default function Aside() {
  return (

<aside id="logo-sidebar" className="fixed top-0 left-0 z-40 w-64 h-screen pt-20 px-4 transition-transform -translate-x-full bg-white border-r shadow-sm border-gray-200 sm:translate-x-0" aria-label="Sidebar">
   <div className="h-full px-1 pb-6 overflow-y-auto bg-white flex flex-col justify-between align-center">
      <ul className="space-y-2 font-medium">
         <li>
            <a href="" className="flex items-center hover:bg-green-50 py-2 px-3 font-medium text-green-800 text-sm rounded-lg group">
               <svg className="flex-shrink-0 w-4 h-4 text-green-800 text-sm transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
               </svg>
               <span className="text-lg ml-4">Beranda</span>
            </a>
         </li>         
         <li>
            <a href="/profile" className="flex items-center hover:bg-green-50 py-2 px-3 font-medium text-green-800 text-sm rounded-lg  group">
               <svg className="flex-shrink-0 w-4 h-4 text-green-800 text-sm transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
               </svg>
               <span className="flex-1 text-lg ml-4 whitespace-nowrap">Profil</span>
            </a>
         </li>
         <li>
            <a href="/" className="flex items-center hover:bg-green-50 py-2 px-3 font-medium text-green-800 text-sm rounded-lg  group">
               <svg className="flex-shrink-0 w-4 h-4 text-green-800 text-sm transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
               </svg>
               <span className="flex-1 ml-4 text-lg whitespace-nowrap">Keluar</span>
            </a>
         </li>
      </ul>      
   </div>
</aside>
  );
}