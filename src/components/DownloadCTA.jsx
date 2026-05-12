import React from 'react';
import { motion } from 'framer-motion';
import { ArrowRight, Apple, Play } from 'lucide-react';

const DownloadCTA = () => {
  return (
    <section className="py-32 relative overflow-hidden">
      {/* Background gradients */}
      <div className="absolute inset-0 bg-brand-primary/10" />
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-[400px] bg-gradient-to-r from-brand-primary/40 to-brand-secondary/40 blur-[120px] rounded-full mix-blend-screen" />

      <div className="max-w-4xl mx-auto px-6 relative z-10 text-center">
        <motion.div
          initial={{ opacity: 0, scale: 0.9 }}
          whileInView={{ opacity: 1, scale: 1 }}
          viewport={{ once: true }}
          className="glass-dark p-12 md:p-20 rounded-[3rem] border border-white/20 shadow-2xl relative overflow-hidden"
        >
          {/* Subtle noise texture */}
          <div className="absolute inset-0 opacity-[0.03] pointer-events-none" style={{ backgroundImage: 'url("data:image/svg+xml,%3Csvg viewBox=\'0 0 200 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noiseFilter\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.65\' numOctaves=\'3\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noiseFilter)\'/%3E%3C/svg%3E")' }}></div>

          <h2 className="text-4xl md:text-6xl font-display font-bold mb-6">
            Ready to simplify your <br/> <span className="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">home maintenance?</span>
          </h2>
          
          <p className="text-xl text-white/80 mb-12 max-w-2xl mx-auto">
            Join thousands of users who trust ServiceMan for their everyday repairs and tasks. Download the app now and get 20% off your first service.
          </p>

          <div className="flex flex-col sm:flex-row justify-center gap-4">
            <button className="flex items-center justify-center gap-3 px-8 py-4 bg-white text-black rounded-full font-bold hover:scale-105 transition-transform">
              <Apple size={24} />
              <div className="text-left leading-tight">
                <div className="text-[10px] font-medium opacity-80">Download on the</div>
                <div className="text-lg">App Store</div>
              </div>
            </button>
            <button className="flex items-center justify-center gap-3 px-8 py-4 glass text-white rounded-full font-bold hover:scale-105 transition-transform border border-white/20">
              <Play size={24} fill="currentColor" />
              <div className="text-left leading-tight">
                <div className="text-[10px] font-medium opacity-80">GET IT ON</div>
                <div className="text-lg">Google Play</div>
              </div>
            </button>
          </div>
        </motion.div>
      </div>
    </section>
  );
};

export default DownloadCTA;
