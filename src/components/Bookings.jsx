import { motion } from 'framer-motion';
import bookingUi from '../assets/booking-ui.jpg';
import avatar from '../assets/avatar.png';
import ahmed from '../assets/ahmed.png';
import escrowShield from '../assets/escrow-shield.png';
import { Phone, MessageSquare, MapPin } from 'lucide-react';

const Bookings = () => {
  return (
    <section className="py-12 md:py-20 lg:py-32 px-4 sm:px-6">
      <div className="max-w-7xl mx-auto">

        <div className="text-center mb-12 md:mb-20">
          <h2 className="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold tracking-tight mb-2 md:mb-4">Click to Fix</h2>
          <p className="text-lg sm:text-2xl md:text-3xl text-gray-500">That's all you need to do.</p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-12 mb-6 md:mb-8">
          <motion.div
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            className="bg-[#F2F4F7] rounded-2xl sm:rounded-3xl lg:rounded-[3rem] p-6 sm:p-8 md:p-12 overflow-hidden flex flex-col justify-between min-h-80 md:min-h-96 lg:h-[480px] group"
          >
            <h3 className="text-xl sm:text-2xl md:text-3xl font-display font-bold mb-4 md:mb-8">
              Experience lightning-fast service when you got something to fix or need done.
            </h3>
            <div className="relative w-full h-40 md:h-56 lg:h-64 bg-white rounded-t-2xl sm:rounded-t-3xl shadow-xl border-t border-x border-gray-200 translate-y-4 group-hover:translate-y-0 transition-transform duration-500 overflow-hidden">
              <img src={bookingUi} alt="UI" className="w-full h-full object-cover" />
            </div>
          </motion.div>

          <motion.div
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ delay: 0.1 }}
            className="bg-[#F2F4F7] rounded-2xl sm:rounded-3xl lg:rounded-[3rem] p-6 sm:p-8 md:p-12 overflow-hidden flex flex-col justify-between min-h-80 md:min-h-96 lg:h-[480px] group"
          >
            <h3 className="text-xl sm:text-2xl md:text-3xl font-display font-bold mb-4 md:mb-8">
              Get notified of arriving pros, track them to your door.
            </h3>
            
            {/* Live Notification Mockup */}
            <div className="relative bg-white rounded-2xl sm:rounded-3xl shadow-xl border border-gray-100 p-4 sm:p-6 group-hover:scale-[1.02] transition-transform duration-500">
               <div className="flex items-center justify-between mb-4 sm:mb-6 bg-gray-50 p-3 sm:p-4 rounded-xl sm:rounded-2xl">
                 <div className="flex items-center gap-2 sm:gap-3">
                   <div className="w-10 sm:w-12 h-10 sm:h-12 rounded-full overflow-hidden bg-gray-200 border-2 border-white shadow-sm">
                     <img src={ahmed} alt="Ahmed" className="w-full h-full object-cover" />
                   </div>
                   <div>
                     <h4 className="font-bold text-sm sm:text-base text-gray-900">Ahmed</h4>
                     <p className="text-xs text-gray-400">Plumber</p>
                   </div>
                 </div>
               </div>

               <div className="flex justify-between items-end">
                 <div>
                   <h5 className="text-xl sm:text-2xl font-bold text-gray-900 leading-none">Arriving in</h5>
                   <p className="text-gray-400 text-xs sm:text-sm mt-1">10minutes</p>
                 </div>
                 <div className="flex gap-2">
                    <div className="w-8 sm:w-10 h-8 sm:h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-900 border border-gray-100 text-sm sm:text-base">
                      <Phone size={16} className="sm:w-5 sm:h-5" />
                    </div>
                    <div className="w-8 sm:w-10 h-8 sm:h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-900 border border-gray-100 text-sm sm:text-base">
                      <MessageSquare size={16} className="sm:w-5 sm:h-5" />
                    </div>
                 </div>
               </div>

               <div className="mt-4 sm:mt-6 flex items-center justify-between border-t border-gray-50 pt-4 sm:pt-6">
                 <div className="flex items-center gap-2 text-brand-orange">
                   <MapPin size={14} className="sm:w-4 sm:h-4" />
                   <span className="text-xs font-bold">10 mins</span>
                 </div>
                 <button className="bg-brand-orange/10 text-brand-orange px-4 sm:px-6 py-2 rounded-lg sm:rounded-xl text-xs sm:text-sm font-bold">
                   Skip
                 </button>
               </div>
            </div>
          </motion.div>
        </div>

        <motion.div
          initial={{ opacity: 0, y: 40 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          className="bg-brand-dark text-white rounded-2xl sm:rounded-3xl lg:rounded-[3rem] p-6 sm:p-8 md:p-12 overflow-hidden relative group min-h-64 md:min-h-80 lg:h-[400px] flex flex-col md:flex-row items-center justify-between gap-6 md:gap-0"
        >
          <div className="max-w-xs md:max-w-md z-10 order-2 md:order-1">
            <h3 className="text-2xl sm:text-3xl md:text-4xl font-display font-bold mb-2 md:mb-4">
              Pay all your providers securely in one place.
            </h3>
            <p className="text-base sm:text-lg md:text-xl text-gray-400">Escrow payments protect your money.</p>
          </div>
          <div className="w-48 sm:w-56 md:w-72 h-48 sm:h-56 md:h-72 bg-white/5 rounded-full absolute md:relative border border-white/10 group-hover:scale-110 transition-transform duration-500 flex items-center justify-center p-6 md:p-8 overflow-hidden order-1 md:order-2 md:ml-auto">
            <img src={escrowShield} alt="Escrow Protection" className="w-full h-full object-contain" />
          </div>
        </motion.div>

      </div>
    </section>
  );
};

export default Bookings;
