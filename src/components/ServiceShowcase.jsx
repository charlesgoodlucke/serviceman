import React from 'react';
import { motion } from 'framer-motion';
import { Droplets, Zap, Sparkles, Wrench, PaintBucket, Truck, ArrowRight } from 'lucide-react';

const services = [
  { icon: <Droplets size={32} />, name: 'Plumbing', color: 'from-blue-500 to-cyan-400' },
  { icon: <Zap size={32} />, name: 'Electrical', color: 'from-yellow-500 to-orange-400' },
  { icon: <Sparkles size={32} />, name: 'Cleaning', color: 'from-emerald-400 to-teal-400' },
  { icon: <Wrench size={32} />, name: 'Assembly', color: 'from-brand-primary to-purple-500' },
  { icon: <PaintBucket size={32} />, name: 'Painting', color: 'from-pink-500 to-rose-400' },
  { icon: <Truck size={32} />, name: 'Moving', color: 'from-brand-secondary to-red-500' },
];

const ServiceShowcase = () => {
  return (
    <section id="services" className="py-24 relative">
      <div className="max-w-7xl mx-auto px-6">
        
        <div className="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="max-w-2xl"
          >
            <h2 className="text-4xl md:text-5xl font-display font-bold mb-6">
              Expert Services for <br/> Every Need.
            </h2>
            <p className="text-white/70 text-lg">
              Whatever you need done, we have a verified professional ready to help. Book instantly and get your tasks sorted today.
            </p>
          </motion.div>
          <motion.button 
            initial={{ opacity: 0, x: 20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            className="flex items-center gap-2 text-brand-primary font-medium hover:text-white transition-colors group"
          >
            View All Services <ArrowRight size={20} className="group-hover:translate-x-1 transition-transform" />
          </motion.button>
        </div>

        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
          {services.map((service, index) => (
            <motion.div
              key={index}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: index * 0.1 }}
              whileHover={{ y: -10 }}
              className="glass p-6 rounded-2xl flex flex-col items-center text-center group cursor-pointer border border-white/5 hover:border-brand-primary/50 transition-all"
            >
              <div className={`w-16 h-16 rounded-2xl bg-gradient-to-br ${service.color} p-0.5 mb-4 group-hover:scale-110 transition-transform duration-300`}>
                <div className="w-full h-full bg-[#151520] rounded-[14px] flex items-center justify-center text-white">
                  {service.icon}
                </div>
              </div>
              <h3 className="font-medium text-lg">{service.name}</h3>
            </motion.div>
          ))}
        </div>

      </div>
    </section>
  );
};

export default ServiceShowcase;
