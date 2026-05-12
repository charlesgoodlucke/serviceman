import React from 'react';
import { motion } from 'framer-motion';
import avatar from '../assets/avatar.png';
import mapImg from '../assets/map.png';
import { Apple, Play, MapPin, Wrench, Calendar, Headphones, Home, ClipboardList, User } from 'lucide-react';

const Hero = () => {
  return (
    <section className="bg-brand-primary text-white pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden rounded-b-[3rem]">
      <div className="max-w-7xl mx-auto px-6 grid grid-cols-2 gap-16 items-center">

        {/* Text Content */}
        <motion.div
          initial={{ opacity: 0, y: 40 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, ease: "easeOut" }}
          className="max-w-lg z-10"
        >
          <h1 className="text-5xl md:text-[80px] font-display font-bold leading-[1.05] tracking-tight mb-6">
            Got Something <br /> to Fix?
          </h1>

          <p className="text-xl md:text-2xl text-white/90 mb-10 leading-snug">
            …with super fast requests, verified handymen, real-time tracking, excellent home services, secure payments, and property maintenance; ServiceMan makes managing your home stress-free and your life easier.
          </p>

          <div className="flex flex-col sm:flex-row gap-6 mb-12">
            <div className="flex flex-col">
              <span className="font-bold mb-3 uppercase tracking-wider text-sm opacity-80">Get started by downloading the app</span>
              <div className="flex gap-4">
                <a href="#" className="flex items-center gap-2 bg-black hover:bg-black/80 text-white px-6 py-3.5 rounded-2xl transition-colors w-40">
                  <Apple size={24} />
                  <div className="flex flex-col text-left">
                    <span className="text-[10px] leading-tight opacity-80">App Store</span>
                  </div>
                </a>
                <a href="#" className="flex items-center gap-2 bg-black hover:bg-black/80 text-white px-6 py-3.5 rounded-2xl transition-colors w-40">
                  <Play size={24} fill="currentColor" />
                  <div className="flex flex-col text-left">
                    <span className="text-[10px] leading-tight opacity-80">Google Play</span>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div className="text-sm font-medium opacity-80 mt-12 flex flex-col gap-1">
            <p>ServiceMan is licensed by local authorities as a trusted home services marketplace.</p>
            <p>Providers insured by top partners.</p>
          </div>
        </motion.div>

        {/* Visuals - Live App UI Mockup */}
        <div className="relative w-full h-[700px] flex items-center justify-end">
          <motion.div
            initial={{ opacity: 0, y: 100 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 1, delay: 0.2, ease: "easeOut" }}
            className="relative w-[320px] h-[650px] bg-[#F8F9FA] rounded-[3rem] border-8 border-black shadow-2xl overflow-hidden z-10 flex flex-col"
          >
            {/* App Header */}
            <div className="absolute top-0 w-full p-6 flex justify-between items-center z-20">
              <div className="w-12 h-12 rounded-full border-2 border-white shadow-lg overflow-hidden bg-gray-200">
                <img src={avatar} alt="User" className="w-full h-full object-cover" />
              </div>
              <div className="bg-white/90 backdrop-blur-md px-4 py-2 rounded-full shadow-lg flex items-center gap-2 border border-gray-100">
                <MapPin size={14} className="text-brand-primary" />
                <span className="text-xs font-bold text-gray-800">Peterborough</span>
              </div>
              <div className="w-12"></div> {/* Spacer */}
            </div>

            {/* Map Area */}
            <div className="flex-1 bg-gray-100 relative overflow-hidden">
              <img src={mapImg} alt="UK Map" className="w-full h-full object-cover opacity-80" />
              <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <motion.div
                  animate={{ scale: [1, 1.2, 1] }}
                  transition={{ duration: 2, repeat: Infinity }}
                  className="w-10 h-10 bg-brand-primary/20 rounded-full flex items-center justify-center"
                >
                  <div className="w-4 h-4 bg-brand-primary rounded-full border-2 border-white"></div>
                </motion.div>
              </div>
            </div>

            {/* Bottom Sheet */}
            <motion.div
              initial={{ y: 100 }}
              animate={{ y: 0 }}
              transition={{ delay: 0.8, type: "spring", damping: 15 }}
              className="bg-white p-6 rounded-t-[2.5rem] shadow-[0_-10px_40px_rgba(0,0,0,0.1)] z-20"
            >
              <div className="w-12 h-1 bg-gray-200 rounded-full mx-auto mb-6"></div>
              <h3 className="text-xl font-bold text-gray-900 mb-6 text-center">Got something to fix?</h3>

              <div className="grid grid-cols-3 gap-4 mb-8">
                <div className="flex flex-col items-center gap-2">
                  <div className="w-14 h-14 bg-brand-primary/10 rounded-2xl flex items-center justify-center text-brand-primary">
                    <Wrench size={24} />
                  </div>
                  <span className="text-[10px] font-bold text-gray-900">Click to Fix</span>
                  <span className="text-[8px] text-gray-400 -mt-1">Urgently</span>
                </div>
                <div className="flex flex-col items-center gap-2">
                  <div className="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-green-500">
                    <Calendar size={24} />
                  </div>
                  <span className="text-[10px] font-bold text-gray-900">Schedule Fix</span>
                  <span className="text-[8px] text-gray-400 -mt-1">For later</span>
                </div>
                <div className="flex flex-col items-center gap-2">
                  <div className="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-500">
                    <Headphones size={24} />
                  </div>
                  <span className="text-[10px] font-bold text-gray-900">Get Support</span>
                  <span className="text-[8px] text-gray-400 -mt-1">Instantly</span>
                </div>
              </div>

              {/* Fake Tab Bar */}
              <div className="flex justify-around items-center pt-2 border-t border-gray-50">
                <div className="flex flex-col items-center gap-1 text-brand-primary">
                  <Home size={18} />
                  <span className="text-[8px] font-bold">Home</span>
                </div>
                <div className="flex flex-col items-center gap-1 text-gray-300">
                  <ClipboardList size={18} />
                  <span className="text-[8px] font-bold">Fix Log</span>
                </div>
                <div className="flex flex-col items-center gap-1 text-gray-300">
                  <User size={18} />
                  <span className="text-[8px] font-bold">Account</span>
                </div>
              </div>
            </motion.div>
          </motion.div>

          {/* Floating Cards simulating PocketApp aesthetic */}
          <motion.div
            animate={{ y: [0, -15, 0] }}
            transition={{ duration: 5, repeat: Infinity, ease: "easeInOut" }}
            className="absolute bottom-[320px] left-0 w-48 h-32 bg-brand-green rounded-3xl shadow-xl rotate-0 z-30 border-4 border-white"
          />
          <motion.div
            animate={{ y: [0, 20, 0] }}
            transition={{ duration: 6, repeat: Infinity, ease: "easeInOut", delay: 1 }}
            className="absolute bottom-32 left-0 w-56 h-36 bg-brand-orange rounded-3xl shadow-xl rotate-6 z-20 border-4 border-white"
          />
        </div>

      </div>
    </section>
  );
};

export default Hero;
