import React, { useState } from 'react';
import { Link } from 'react-router-dom';

function Login() {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log('Email:', email);
        console.log('Password:', password);
        
    };

    return (
        <section className="h-screen">
            <div className="flex flex-col items-center bg-teal-600 justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="/" className="flex text-white items-center mb-6 text-2xl font-bold text-blue-800">
                    STUDY MATH
                </a>
                <div className="w-full rounded-2xl shadow-lg md:mt-0 sm:max-w-md xl:p-0 bg-teal-900">
                    <div className="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 className="text-xl text-center font-bold leading-tight tracking-tight text-white md:text-2xl">
                            Selamat Datang, StudMet!
                        </h1>

                        <form onSubmit={handleSubmit} className="space-y-4 md:space-y-6">
                            <div>
                                <label htmlFor="email" className="block flex mb-2 text-sm font-medium text-white">Email</label>
                                <input type="email" name="email" id="email" value={email} onChange={(e) => setEmail(e.target.value)} className="bg-gray-50 border border-green-500 text-grye-900 sm:text-sm rounded-lg focus:ring-amber-500 focus:border-green-500 block w-full p-2.5" placeholder="Masukkan Email" required="" />
                            </div>
                            <div>
                                <label htmlFor="password" className="block flex mb-2 text-sm font-medium text-white">Kata Sandi</label>
                                <input type="password" name="password" id="password" value={password} onChange={(e) => setPassword(e.target.value)} placeholder="Masukkan Kata Sandi" className="bg-gray-50 border border-green-500 text-grey-900 sm:text-sm rounded-lg focus:ring-amber-500 focus:border-green-500 block w-full p-2.5" required="" />
                            </div>
                            <div className="flex items-center justify-end">
                                <Link to="/Reg" className="text-sm font-medium text-yellow-500 hover:underline">Belum Punya Akun?</Link>
                            </div>
                            <div className='flex items-center justify-end'>
                                <Link to="/Profile" className="w-full text-white bg-teal-950 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</Link>
                                </div>                                                            
                        </form>
                        <p className="text-sm font-light text-white">
                            <span className="text-sm sm:text-center">© 2024 <a href="" className="hover:underline">Lubabul Ilmi</a>.
                                All Rights Reserved.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    );
}

export default Login;
