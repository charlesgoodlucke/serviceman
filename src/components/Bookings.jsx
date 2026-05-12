import { motion } from 'framer-motion';
import bookingUi from '../assets/booking-ui.jpg';
import avatar from '../assets/avatar.png';
import ahmed from '../assets/ahmed.png';
import escrowShield from '../assets/escrow-shield.png';
import { Phone, MessageSquare, MapPin } from 'lucide-react';

const Bookings = () => {
  return (
    <section className="py-32 px-6">
      <div className="max-w-7xl mx-auto">

        <div className="text-center mb-20">
          <h2 className="text-5xl md:text-7xl font-display font-bold tracking-tight mb-4">Click to Fix</h2>
          <p className="text-2xl md:text-3xl text-gray-500">That's all you need to do.</p>
        </div>

        <div className="grid md:grid-cols-2 gap-8 mb-8">
          <motion.div
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            className="bg-[#F2F4F7] rounded-[3rem] p-12 overflow-hidden flex flex-col justify-between h-[480px] group"
          >
            <h3 className="text-3xl font-display font-bold mb-8">
              Experience lightning-fast service when you got something to fix or need done.
            </h3>
            <div className="relative w-full h-64 bg-white rounded-t-3xl shadow-xl border-t border-x border-gray-200 translate-y-4 group-hover:translate-y-0 transition-transform duration-500 overflow-hidden">
              <img src={bookingUi} alt="UI" className="w-full h-full object-cover" />
            </div>
          </motion.div>

          <motion.div
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ delay: 0.1 }}
            className="bg-[#F2F4F7] rounded-[3rem] p-12 overflow-hidden flex flex-col justify-between h-[480px] group"
          >
            <h3 className="text-3xl font-display font-bold mb-8">
              Get notified of arriving pros, track them to your door.
            </h3>
            
            {/* Live Notification Mockup */}
            <div className="relative bg-white rounded-3xl shadow-xl border border-gray-100 p-6 group-hover:scale-[1.02] transition-transform duration-500">
               <div className="flex items-center justify-between mb-6 bg-gray-50 p-4 rounded-2xl">
                 <div className="flex items-center gap-3">
                   <div className="w-12 h-12 rounded-full overflow-hidden bg-gray-200 border-2 border-white shadow-sm">
                     <img src={ahmed} alt="Ahmed" className="w-full h-full object-cover" />
                   </div>
                   <div>
                     <h4 className="font-bold text-gray-900">Ahmed</h4>
                     <p className="text-xs text-gray-400">Plumber</p>
                   </div>
                 </div>
               </div>

               <div className="flex justify-between items-end">
                 <div>
                   <h5 className="text-2xl font-bold text-gray-900 leading-none">Arriving in</h5>
                   <p className="text-gray-400 text-sm mt-1">10minutes</p>
                 </div>
                 <div className="flex gap-2">
                    <div className="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-900 border border-gray-100">
                      <Phone size={18} />
                    </div>
                    <div className="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-900 border border-gray-100">
                      <MessageSquare size={18} />
                    </div>
                 </div>
               </div>

               <div className="mt-6 flex items-center justify-between border-t border-gray-50 pt-6">
                 <div className="flex items-center gap-2 text-brand-orange">
                   <MapPin size={16} />
                   <span className="text-xs font-bold">10 mins</span>
                 </div>
                 <button className="bg-brand-orange/10 text-brand-orange px-6 py-2 rounded-xl text-sm font-bold">
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
          className="bg-brand-dark text-white rounded-[3rem] p-12 overflow-hidden relative group h-[400px] flex items-center justify-between"
        >
          <div className="max-w-md z-10">
            <h3 className="text-4xl font-display font-bold mb-4">
              Pay all your providers securely in one place.
            </h3>
            <p className="text-xl text-gray-400">Escrow payments protect your money.</p>
          </div>
          <div className="hidden md:block w-72 h-72 bg-white/5 rounded-full absolute right-12 border border-white/10 group-hover:scale-110 transition-transform duration-500 flex items-center justify-center p-8 overflow-hidden">
            <img src={escrowShield} alt="Escrow Protection" className="w-full h-full object-contain" />
          </div>
        </motion.div>

      </div>
    </section>
  );
};

export default Bookings;
