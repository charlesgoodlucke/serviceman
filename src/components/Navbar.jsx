import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';
import { Menu, X } from 'lucide-react';
import logoPurple from '../assets/logo-purple.png';
import logoWhite from '../assets/logo-white.png';

const Navbar = () => {
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <nav className={`fixed top-0 w-full z-50 transition-all duration-300 ${scrolled ? 'bg-white shadow-sm py-4 text-brand-dark' : 'bg-transparent py-6 text-white'}`}>
      <div className="max-w-7xl mx-auto px-6 flex justify-between items-center">

        <a href="#" className="flex items-center gap-0 text-2xl font-display font-bold">
          <img
            src={scrolled ? logoPurple : logoWhite}
            alt="ServiceMan"
            className="h-8 w-auto transition-all duration-300"
          />
          <span className={`-ml-0 ${scrolled ? 'text-brand-primary' : 'text-white'}`}>erviceMan</span>
        </a>

        {/* Desktop Nav */}
        <div className="flex items-center gap-4">
          <a href="#download" className={`px-6 py-3 rounded-full font-bold transition-all ${scrolled ? 'bg-brand-dark text-white hover:bg-black' : 'bg-white text-brand-primary hover:bg-gray-100'}`}>
            Get the app
          </a>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
