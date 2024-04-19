import React from 'react';
import Navbar from '../components/Navbar';
import Aside from '../components/Aside';
import profPic from '../assets/profil.png'

export default function Profile(){
  return (
    <div className=''>
<Navbar/>
<div>
<Aside/>  

<div className="p-4 sm:ml-64">    
    <div className="rounded-lg mt-14 flex flex-col item-start">      

      <div className="mx-auto w-full px-4 lg:px-12">

 <nav className="flex bg-white mt-7 mb-5" aria-label="Breadcrumb">
           <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
             <li className="inline-flex items-center">
               <a href=""
                className=" inline-flex items-center text-lg font-medium text-green-800 hover:text-lime-500">
                <svg className="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  viewBox="0 0 20 20">
                  <path
                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Beranda
              </a>
            </li>
            <li aria-current="page">
              <div className="flex items-center">
                <svg className="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
                </svg>
                <span className="ms-1 text-lg font-medium text-green-800 md:ms-2">Profile</span>
              </div>
            </li>
          </ol>
        </nav>
        </div>
        </div>


        <div className="pt-4 border-t border-gray-200">
            <dl className="divide-y divide-gray-100">
              <div className="px-1 sm:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 sm:gap-4 sm:px-0">
                <dt className="text-md font-medium leading-6 text-gray-900 flex flex-col col-span-2 lg:col-span-1">
                  <form className="form" id="form" encType="multipart/form-data" method="post">
                    <div className="space-y-12">
                      <div className="pb-5">
                        <h2 className="text-xl font-semibold leading-7 text-gray-900">Profile Kamu</h2>
                        <div className="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                          <div className="col-span-full">
                            <label htmlFor="photo" className="block text-sm font-medium leading-6 text-gray-900">Ganti Foto</label>
                            <div className="mt-2 flex items-center gap-x-3 ">
                              <img src={profPic} className="h-28 w-28 rounded-full" alt="" />
                              <div className="w-2/12">
                                <input type="file" name="pfp" id="pfp" accept="image/png, image/gif, image/jpeg" className="text-sm file:bg-white file:border-blue-700 file:text-blue-700 file:text-sm file:border file:py-1 file:px-3 file:rounded-full" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </dt>
                <dd className="mt-1 font-medium leading-6 text-gray-900 sm:col-span-2 sm:mt-0"></dd>
              </div>
              <form action="" method="post">
              <div
                class="px-1 py-6 sm:grid grid-cols-1 lg:grid-cols-3 sm:gap-4 sm:px-0 flex md:items-center md:flex-row flex-col items-start">
                <dt class="text-md font-medium leading-6 text-gray-900">Username</dt>
                <dd class="mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <input type="text" name="name" id="small-input"
                    class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5"
                    placeholder="nama" value="Lubabul Ilmi">
                      </input>
                </dd>
              </div>
              <div
                class="px-1 py-6 sm:grid grid-cols-1 lg:grid-cols-3 sm:gap-4 sm:px-0 flex md:items-center md:flex-row flex-col items-start">
                <dt class="text-md font-medium leading-6 text-gray-900">Kata sandi</dt>
                <dd class="mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <input type="text" name="nim" id="small-input"
                    class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5"
                    placeholder="nim" value="********">
                      </input>
                </dd>
              </div>
              <div
                class="px-1 py-6 sm:grid grid-cols-1 lg:grid-cols-3 sm:gap-4 sm:px-0 flex md:items-center md:flex-row flex-col items-start">
                <dt class="text-md font-medium leading-6 text-gray-900">Email</dt>
                <dd class="mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                  <input type="text" name="email" id="small-input"
                    class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5"
                    placeholder="email" value="Lubabul.ilmi@gmail.com">
                      </input>
                </dd>
              </div>
              <div
                class="px-1 py-6 sm:grid grid-cols-1 lg:grid-cols-3 sm:gap-4 sm:px-0 flex md:items-center md:flex-row flex-col items-start">
                <dt class="text-md font-medium leading-6 text-gray-900"></dt>
                <dd class="mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0 flex items-end">
                  <button type="submit" name="edit"
                    class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-5 h-5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2"
                        d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.4 1.6a2 2 0 0 1 0 2.7l-6 6-3.4.7.7-3.4 6-6a2 2 0 0 1 2.7 0Z" />
                    </svg>
                    Edit Profile
                  </button>
                  <button type="button" data-modal-target="edit-pass" data-modal-toggle="edit-pass"
                    class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 ml-2 focus:outline-none focus:ring-amber-300">
                    <svg class="w-5 h-5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2" />
                    </svg>
                    Ubah Password
                  </button>                  
                </dd>
              </div>
            </form>
            </dl>
          </div>
</div>
</div>
</div>


  );
}


