import React from 'react';
import { motion } from 'framer-motion';
import { ShieldCheck, Star, CreditCard, MapPin } from 'lucide-react';

const TrustSafety = () => {
  return (
    <section id="trust" className="py-24 relative overflow-hidden">
      {/* Background Glow */}
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-brand-primary/10 rounded-full blur-[150px] -z-10" />

      <div className="max-w-7xl mx-auto px-6">
        <div className="grid grid-cols-2 gap-16 items-center">
          
          {/* Visual Side */}
          <motion.div 
            initial={{ opacity: 0, x: -30 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            className="relative"
          >
            <div className="glass-dark p-8 rounded-3xl border border-white/10 relative z-10">
              <div className="flex items-center gap-6 mb-8">
                <div className="w-16 h-16 rounded-full bg-green-500/20 text-green-400 flex items-center justify-center">
                  <ShieldCheck size={32} />
                </div>
                <div>
                  <h4 className="text-2xl font-bold font-display">100% Verified</h4>
                  <p className="text-white/60">Background checked pros</p>
                </div>
              </div>
              
              <div className="space-y-4">
                {[1, 2, 3].map((i) => (
                  <div key={i} className="glass p-4 rounded-xl flex items-center justify-between">
                    <div className="flex items-center gap-4">
                      <div className="w-12 h-12 rounded-full bg-gray-800 overflow-hidden">
                        <img src={`https://i.pravatar.cc/100?img=${i + 10}`} alt="pro" className="w-full h-full object-cover" />
                      </div>
                      <div>
                        <p className="font-bold">John Doe</p>
                        <div className="flex items-center text-yellow-500 text-sm">
                          <Star size={12} fill="currentColor" />
                          <Star size={12} fill="currentColor" />
                          <Star size={12} fill="currentColor" />
                          <Star size={12} fill="currentColor" />
                          <Star size={12} fill="currentColor" />
                          <span className="text-white/50 ml-2">(120)</span>
                        </div>
                      </div>
                    </div>
                    <div className="px-3 py-1 bg-green-500/20 text-green-400 text-xs font-bold rounded-full">
                      Verified
                    </div>
                  </div>
                ))}
              </div>
            </div>

            {/* Decorative Elements */}
            <motion.div 
              animate={{ y: [0, -10, 0] }}
              transition={{ duration: 4, repeat: Infinity, ease: "easeInOut" }}
              className="absolute -top-10 -right-10 glass p-6 rounded-2xl z-20"
            >
              <div className="text-4xl font-display font-bold text-brand-secondary mb-2">4.9/5</div>
              <p className="text-sm text-white/70">Average Rating</p>
            </motion.div>
          </motion.div>

          {/* Text Content */}
          <motion.div 
            initial={{ opacity: 0, x: 30 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
          >
            <h2 className="text-4xl md:text-5xl font-display font-bold mb-6">
              Your Safety is Our <br/> <span className="text-gradient">Top Priority</span>.
            </h2>
            <p className="text-lg text-white/70 mb-10 leading-relaxed">
              We don't just connect you with anyone. Every service provider on ServiceMan goes through a rigorous vetting process to ensure your peace of mind.
            </p>

            <div className="grid grid-cols-2 gap-8">
              <div>
                <div className="w-12 h-12 rounded-xl bg-brand-primary/20 text-brand-primary flex items-center justify-center mb-4">
                  <ShieldCheck size={24} />
                </div>
                <h4 className="text-xl font-bold mb-2">Verified Pros</h4>
                <p className="text-white/60">Comprehensive background checks and identity verification for all providers.</p>
              </div>
              
              <div>
                <div className="w-12 h-12 rounded-xl bg-brand-secondary/20 text-brand-secondary flex items-center justify-center mb-4">
                  <CreditCard size={24} />
                </div>
                <h4 className="text-xl font-bold mb-2">Secure Payments</h4>
                <p className="text-white/60">Your money is held safely and only released when the job is completed to your satisfaction.</p>
              </div>

              <div>
                <div className="w-12 h-12 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center mb-4">
                  <Star size={24} />
                </div>
                <h4 className="text-xl font-bold mb-2">Real Reviews</h4>
                <p className="text-white/60">Genuine ratings and reviews from actual customers in your neighborhood.</p>
              </div>

              <div>
                <div className="w-12 h-12 rounded-xl bg-pink-500/20 text-pink-400 flex items-center justify-center mb-4">
                  <MapPin size={24} />
                </div>
                <h4 className="text-xl font-bold mb-2">Live Tracking</h4>
                <p className="text-white/60">Track your provider's location in real-time so you know exactly when they'll arrive.</p>
              </div>
            </div>
          </motion.div>

        </div>
      </div>
    </section>
  );
};

export default TrustSafety;
