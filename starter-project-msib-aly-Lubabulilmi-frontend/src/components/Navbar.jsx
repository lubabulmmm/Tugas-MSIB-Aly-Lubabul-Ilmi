import React from 'react';
import profPic from '../assets/profil.png'

export default function Navbar() {
  return (
<nav className="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div className="px-3 py-3 sm:py-3 lg:px-6 lg:pl-3">
    <div className="flex items-center justify-between px-3">
      <div className="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" className="inline-flex items-center p-2 text-sm text-blue-900 sm:hidden rounded-lg hover:bg-blue-200 focus:outline-none focus:ring-1 focus:ring-gray-200">
          <span className="sr-only">Open sidebar</span>
          <svg className="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
          </svg>
        </button>
        <a href="#" className="flex ml-2 md:mr-24 items-center">          
          <span className="self-center text-xl text-teal-900 font-bold sm:text-xl whitespace-nowrap logo-text">Stud Mat</span>
        </a>
      </div>
      <div className="flex items-center">
        <div className="name px-3 text-sm">Hai, Lubabul Ilmi</div>
        <div className="flex items-center ml-3">
          <div>
            <button type="button" className="flex text-sm bg-amber-500 rounded-full focus:ring-4 focus:ring-teal-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span className="sr-only">Open user menu</span>
              <img className="w-9 h-9 rounded-full" src={profPic} alt="user photo">
                </img>
            </button>
          </div>
          <div className="z-50 hidden my-4 text-base text-gray-900 list-none divide-y rounded shadow-lg bg-white divide-gray-300" id="dropdown-user">
            <div className="px-4 py-3" role="none">
              <p className="text-sm text-gray-900" role="none">
              </p>
              <p className="text-sm font-medium text-gray-900 truncate" role="none">
              </p>
            </div>
            <ul className="py-1" role="none">              
              <li>
                <a href="" className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">Keluar</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>



  );
}
