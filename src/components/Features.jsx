import { motion } from 'framer-motion';
import erikHd from '../assets/erik-hd.png';
import onboardingMockup from '../assets/onboarding-mockup.png';
import { X, Volume2 } from 'lucide-react';

const Features = () => {
  return (
    <section className="py-20 px-6 space-y-32">
      <div className="max-w-7xl mx-auto">

        {/* Verified Pros (Mapping to 'Cards') */}
        <div className="mb-32">
          <div className="text-center mb-16">
            <h2 className="text-5xl md:text-7xl font-display font-bold tracking-tight mb-4">Pros</h2>
            <p className="text-2xl md:text-3xl text-gray-500">Enjoy the flexibility of Verified Professionals</p>
          </div>

          <motion.div
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            className="bg-brand-orange rounded-[3rem] p-12 md:p-24 flex flex-col md:flex-row items-center gap-12 text-white h-[600px] overflow-hidden relative"
          >
            <div className="max-w-md z-10">
              <h3 className="text-4xl md:text-5xl font-display font-bold mb-6 leading-tight">
                Connect with the best handymen in your area. You're in complete control.
              </h3>
              <p className="text-xl text-white/80">Track reviews, verify identities, and request services safely.</p>
            </div>

            <div className="flex-1 w-full h-full relative">
              {/* Live Pro Profile Mockup */}
              <motion.div
                whileHover={{ rotate: 8, scale: 1.05 }}
                transition={{ duration: 0.5 }}
                className="absolute right-0 top-1/2 -translate-y-1/2 w-[300px] h-[520px] bg-white rounded-[3rem] shadow-2xl rotate-12 border-8 border-white/20 flex flex-col items-center py-12 px-8"
              >
                <div className="w-32 h-32 rounded-full border-4 border-gray-100 shadow-xl overflow-hidden mb-6">
                  <img src={erikHd} alt="Erik" className="w-full h-full object-cover" />
                </div>

                <h4 className="text-2xl font-bold text-gray-900 mb-1">Erik</h4>
                <p className="text-gray-400 font-medium mb-12">01:25</p>

                <div className="flex gap-6 mt-auto">
                  <div className="w-16 h-16 rounded-full bg-[#FF4B26] flex items-center justify-center text-white shadow-lg shadow-red-200">
                    <X size={28} strokeWidth={3} />
                  </div>
                  <div className="w-16 h-16 rounded-full bg-[#5D627B] flex items-center justify-center text-white shadow-lg shadow-slate-200">
                    <Volume2 size={28} />
                  </div>
                </div>
              </motion.div>
            </div>
          </motion.div>
        </div>



        {/* Property Maintenance (Mapping to 'Shops') */}<div></div>
        <div>
          <div className="text-center mb-16">
            <h2 className="text-5xl md:text-7xl font-display font-bold tracking-tight mb-4">Providers</h2>
            <p className="text-2xl md:text-3xl text-gray-500">Take your service business to the next level</p>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            <motion.div
              initial={{ opacity: 0, y: 40 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true, margin: "-100px" }}
              className="bg-brand-red text-white rounded-[3rem] p-12 overflow-hidden h-[500px] relative group"
            >
              <h3 className="text-3xl md:text-4xl font-display font-bold mb-4 z-10 relative max-w-sm">
                Create a provider profile in less than 3 mins and start earning.
              </h3>
              <p className="text-xl text-white/80 max-w-sm z-10 relative">Grow your local service <br></br> empire.</p>
              <div className="absolute bottom-0 right-8 w-64 h-[380px] bg-white rounded-t-[3rem] shadow-2xl translate-y-16 group-hover:translate-y-8 transition-transform duration-500 overflow-hidden border-x-[6px] border-t-[6px] border-white/20">
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
              className="bg-brand-dark text-white rounded-[3rem] p-12 overflow-hidden h-[500px] relative group"
            >
              <h3 className="text-3xl md:text-4xl font-display font-bold mb-4 z-10 relative max-w-sm">
                Enjoy 0% onboarding fee and get instant access to customers in your area from our platform.
              </h3>
              <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white/5 rounded-full blur-3xl group-hover:bg-white/10 transition-colors"></div>
            </motion.div>
          </div>
        </div>

      </div>
    </section>
  );
};

export default Features;
