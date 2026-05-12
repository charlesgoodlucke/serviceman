import React from 'react';
import { motion } from 'framer-motion';

const steps = [
  {
    number: "01",
    title: "Choose a Service",
    description: "Select from our wide range of home services. Tell us what you need and when you need it.",
    image: "https://placehold.co/600x400/2A2A35/FFF?text=Select+Service"
  },
  {
    number: "02",
    title: "Get Matched Instantly",
    description: "Our algorithm connects you with the best verified professional in your area within minutes.",
    image: "https://placehold.co/600x400/8046F1/FFF?text=Matching+Pro"
  },
  {
    number: "03",
    title: "Track & Pay Securely",
    description: "Track your provider in real-time. Pay securely through the app only when the job is done.",
    image: "https://placehold.co/600x400/FF6600/FFF?text=Track+%26+Pay"
  }
];

const HowItWorks = () => {
  return (
    <section id="how-it-works" className="py-24 bg-[#151520] relative">
      <div className="max-w-7xl mx-auto px-6">
        
        <div className="text-center mb-20">
          <h2 className="text-4xl md:text-5xl font-display font-bold mb-6">How It Works</h2>
          <p className="text-white/70 text-lg max-w-2xl mx-auto">
            Booking a service should be easy. We've simplified the process to get your problems solved faster.
          </p>
        </div>

        <div className="relative">
          {/* Timeline Line */}
          <div className="absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-brand-primary/10 via-brand-primary to-brand-secondary/10 -translate-y-1/2" />

          <div className="grid grid-cols-3 gap-8">
            {steps.map((step, index) => (
              <motion.div 
                key={index}
                initial={{ opacity: 0, y: 30 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true, margin: "-100px" }}
                transition={{ delay: index * 0.2 }}
                className="relative"
              >
                <div className="glass p-2 rounded-2xl mb-8 relative z-10 mx-auto w-full max-w-sm overflow-hidden group">
                  <div className="relative rounded-xl overflow-hidden aspect-video">
                    <img src={step.image} alt={step.title} className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div className="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500" />
                  </div>
                </div>

                {/* Timeline Node */}
                <div className="flex absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-[#151520] border-4 border-brand-primary items-center justify-center z-20 font-bold font-display shadow-[0_0_20px_rgba(128,70,241,0.5)]">
                  {step.number}
                </div>

                <div className="text-center mt-24">
                  <h3 className="text-2xl font-display font-bold mb-4">{step.title}</h3>
                  <p className="text-white/70">{step.description}</p>
                </div>
              </motion.div>
            ))}
          </div>
        </div>

      </div>
    </section>
  );
};

export default HowItWorks;
