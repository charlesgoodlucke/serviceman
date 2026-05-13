import { motion } from 'framer-motion';
import erikHd from '../assets/erik-hd.png';
import onboardingMockup from '../assets/onboarding-mockup.png';
import { X, Volume2 } from 'lucide-react';

const Features = () => {
  return (
    <section className="py-12 md:py-20 lg:py-32 px-4 sm:px-6 space-y-16 md:space-y-24 lg:space-y-32">
      <div className="max-w-7xl mx-auto">

        {/* Verified Pros (Mapping to 'Cards') */}
        <div className="mb-16 md:mb-24 lg:mb-32">
          <div className="text-center mb-8 md:mb-12 lg:mb-16">
            <h2 className="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold tracking-tight mb-2 md:mb-4">Pros</h2>
            <p className="text-lg sm:text-2xl md:text-3xl text-gray-500">Enjoy the flexibility of Verified Professionals</p>
          </div>

          <motion.div
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            className="bg-brand-orange rounded-2xl sm:rounded-3xl lg:rounded-[3rem] p-6 sm:p-8 md:p-16 lg:p-24 flex flex-col lg:flex-row items-center gap-8 md:gap-12 text-white min-h-80 md:min-h-96 lg:h-[600px] overflow-hidden relative"
          >
            <div className="max-w-xs md:max-w-md z-10">
              <h3 className="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-display font-bold mb-4 md:mb-6 leading-tight">
                Connect with the best handymen in your area. You're in complete control.
              </h3>
              <p className="text-base sm:text-lg md:text-xl text-white/80">Track reviews, verify identities, and request services safely.</p>
            </div>

            <div className="flex-1 w-full h-48 sm:h-64 md:h-80 lg:h-full relative">
              {/* Live Pro Profile Mockup */}
              <motion.div
                whileHover={{ rotate: 8, scale: 1.05 }}
                transition={{ duration: 0.5 }}
                className="absolute right-0 top-1/2 -translate-y-1/2 w-48 sm:w-56 md:w-80 lg:w-[300px] h-56 sm:h-80 md:h-96 lg:h-[520px] bg-white rounded-2xl sm:rounded-3xl lg:rounded-[3rem] shadow-2xl rotate-6 border-6 sm:border-8 border-white/20 flex flex-col items-center py-8 sm:py-10 md:py-12 px-6 sm:px-8"
              >
                <div className="w-20 sm:w-24 md:w-32 h-20 sm:h-24 md:h-32 rounded-full border-3 sm:border-4 border-gray-100 shadow-lg overflow-hidden mb-4 md:mb-6">
                  <img src={erikHd} alt="Erik" className="w-full h-full object-cover" />
                </div>

                <h4 className="text-lg sm:text-xl md:text-2xl font-bold text-gray-900 mb-1">Erik</h4>
                <p className="text-gray-400 font-medium mb-6 md:mb-12">01:25</p>

                <div className="flex gap-4 md:gap-6 mt-auto">
                  <div className="w-12 sm:w-14 md:w-16 h-12 sm:h-14 md:h-16 rounded-full bg-[#FF4B26] flex items-center justify-center text-white shadow-lg shadow-red-200">
                    <X size={24} className="md:w-7 md:h-7" strokeWidth={3} />
                  </div>
                  <div className="w-12 sm:w-14 md:w-16 h-12 sm:h-14 md:h-16 rounded-full bg-[#5D627B] flex items-center justify-center text-white shadow-lg shadow-slate-200">
                    <Volume2 size={24} className="md:w-7 md:h-7" />
                  </div>
                </div>
              </motion.div>
            </div>
          </motion.div>
        </div>



        {/* Property Maintenance (Mapping to 'Shops') */}<div></div>
        <div>
          <div className="text-center mb-8 md:mb-12 lg:mb-16">
            <h2 className="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold tracking-tight mb-2 md:mb-4">Providers</h2>
            <p className="text-lg sm:text-2xl md:text-3xl text-gray-500">Take your service business to the next level</p>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-12 lg:gap-16">
            <motion.div
              initial={{ opacity: 0, y: 40 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true, margin: "-100px" }}
              className="bg-brand-red text-white rounded-2xl sm:rounded-3xl lg:rounded-[3rem] p-6 sm:p-8 md:p-12 overflow-hidden min-h-64 md:min-h-80 lg:h-[500px] relative group"
            >
              <h3 className="text-2xl sm:text-3xl md:text-4xl font-display font-bold mb-2 md:mb-4 z-10 relative max-w-xs sm:max-w-sm">
                Create a provider profile in less than 3 mins and start earning.
              </h3>
              <p className="text-base sm:text-lg md:text-xl text-white/80 max-w-xs sm:max-w-sm z-10 relative">Grow your local service <br></br> empire.</p>
              <div className="absolute bottom-0 right-4 sm:right-6 md:right-8 w-48 sm:w-56 md:w-64 h-64 sm:h-80 md:h-[380px] bg-white rounded-t-2xl sm:rounded-t-3xl shadow-2xl translate-y-12 group-hover:translate-y-6 transition-transform duration-500 overflow-hidden border-x-4 sm:border-x-5 md:border-x-6 border-t-4 sm:border-t-5 md:border-t-6 border-white/20">
                <img
                  src={onboardingMockup}
                  alt="Provider Onboarding"
                  className="w-full h-full object-cover object-top"
                />
              </div>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, y: 40 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true, margin: "-100px" }}
              transition={{ delay: 0.1 }}
              className="bg-brand-dark text-white rounded-2xl sm:rounded-3xl lg:rounded-[3rem] p-6 sm:p-8 md:p-12 overflow-hidden min-h-64 md:min-h-80 lg:h-[500px] relative group"
            >
              <h3 className="text-2xl sm:text-3xl md:text-4xl font-display font-bold mb-4 z-10 relative max-w-xs sm:max-w-sm">
                Enjoy 0% onboarding fee and get instant access to customers in your area from our platform.
              </h3>
              <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 sm:w-56 md:w-64 h-48 sm:h-56 md:h-64 bg-white/5 rounded-full blur-3xl group-hover:bg-white/10 transition-colors"></div>
            </motion.div>
          </div>
        </div>

      </div>
    </section>
  );
};

export default Features;
