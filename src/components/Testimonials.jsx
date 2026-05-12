import { motion } from 'framer-motion';

const Testimonials = () => {
  return (
    <section className="py-24 px-6 bg-white rounded-[3rem] mt-32 mx-auto max-w-7xl">
      <div className="text-center mb-16">
        <h2 className="text-5xl md:text-7xl font-display font-bold tracking-tight mb-4 text-brand-dark">Testimonials</h2>
        <p className="text-2xl md:text-3xl text-gray-500 max-w-2xl mx-auto">
          Here's what some users who have hopped on the ServiceMan train have to say.
        </p>
      </div>

      <div className="grid grid-cols-3 gap-8">
        {[1, 2, 3].map((i) => (
          <motion.div
            key={i}
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-50px" }}
            transition={{ delay: i * 0.1 }}
            className="bg-[#F2F4F7] p-8 rounded-3xl text-brand-dark"
          >
            <div className="flex gap-1 mb-6 text-yellow-400">
              ★★★★★
            </div>
            <p className="text-lg mb-8 font-medium leading-relaxed">
              "This app is exactly what I needed. Finding a verified plumber used to take days, now it takes literally 3 minutes."
            </p>
            <div className="flex items-center gap-4">
              <div className="w-12 h-12 bg-gray-300 rounded-full"></div>
              <div className="font-bold">Alex Johnson</div>
            </div>
          </motion.div>
        ))}
      </div>

      {/*<div className="mt-20 text-center">
        <h4 className="text-xl font-bold mb-8 text-brand-dark">In the Press:</h4>
        <div className="flex justify-center items-center gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
          <div className="text-2xl font-bold font-display">TechCrunch</div>
          <div className="text-2xl font-bold font-display">Forbes</div>
          <div className="text-2xl font-bold font-display">Wired</div>
        </div>
      </div>*/}
    </section>
  );
};

export default Testimonials;
