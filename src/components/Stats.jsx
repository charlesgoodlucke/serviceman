import React, { useEffect, useState } from 'react';
import { motion, useInView } from 'framer-motion';
import { useRef } from 'react';

const StatCounter = ({ value, label, suffix = "" }) => {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-50px" });
  const [count, setCount] = useState(0);

  useEffect(() => {
    if (isInView) {
      let start = 0;
      const duration = 2000;
      const increment = value / (duration / 16);
      
      const timer = setInterval(() => {
        start += increment;
        if (start >= value) {
          setCount(value);
          clearInterval(timer);
        } else {
          setCount(Math.floor(start));
        }
      }, 16);
      return () => clearInterval(timer);
    }
  }, [isInView, value]);

  return (
    <div ref={ref} className="text-center">
      <div className="text-4xl md:text-6xl font-display font-bold text-transparent bg-clip-text bg-gradient-to-br from-white to-white/50 mb-2">
        {count.toLocaleString()}{suffix}
      </div>
      <div className="text-white/60 font-medium tracking-wide uppercase text-sm">{label}</div>
    </div>
  );
};

const Stats = () => {
  return (
    <section className="py-20 border-y border-white/5 relative overflow-hidden">
      <div className="absolute top-0 left-1/4 w-full h-full bg-brand-primary/5 blur-[100px] -z-10" />
      
      <div className="max-w-7xl mx-auto px-6">
        <div className="grid grid-cols-4 gap-6">
          <StatCounter value={150} label="Services Completed" suffix="K+" />
          <StatCounter value={10} label="Verified Providers" suffix="K+" />
          <StatCounter value={50} label="Cities Covered" suffix="+" />
          <StatCounter value={15} label="Avg Response Time" suffix="m" />
        </div>
      </div>
    </section>
  );
};

export default Stats;
